<?php namespace App\Http\Controllers\User;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show', 'fans', 'follower']]);
    }

    public function index()
    {
        return view('user.index');
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    public function edit(User $user, Request $request)
    {
        $this->authorize('update', $user);
        return view('user.' . $request->query('type'), compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {
        $this->authorize('update', $user);
        $data = $request->all();
        if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }
        $user->update($data);
        return back()->with('success', '资料修改成功');
    }

    public function destroy(User $user)
    {
        //
    }

    public function follow(User $user)
    {
        $this->authorize('follow', $user);
        auth()->user()->follower()->toggle([$user->id]);
        return back();
    }

    public function fans(User $user)
    {
        $fans = $user->fans()->paginate(1);
        return view('user.fans', compact('fans', 'user'));
    }

    public function follower(User $user)
    {
        $followers = $user->follower()->paginate(1);
        return view('user.follower', compact('followers', 'user'));
    }
}
