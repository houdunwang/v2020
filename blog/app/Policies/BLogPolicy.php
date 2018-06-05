<?php

namespace App\Policies;

use App\User;
use App\Blog;
use Illuminate\Auth\Access\HandlesAuthorization;

class BLogPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the blog.
     *
     * @param  \App\User $user
     * @param  \App\Blog $blog
     * @return mixed
     */
    public function view(User $user, Blog $blog)
    {
        //
    }

    /**
     * Determine whether the user can create blogs.
     *
     * @param  \App\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the blog.
     *
     * @param  \App\User $user
     * @param  \App\Blog $blog
     * @return mixed
     */
    public function update(User $user, Blog $blog)
    {
        //
    }

    /**
     * Determine whether the user can delete the blog.
     *
     * @param  \App\User $user
     * @param  \App\Blog $blog
     * @return mixed
     */
    public function delete(User $user, Blog $blog)
    {
        return  $user->is_admin || $user->id == $blog->user_id;
    }
}
