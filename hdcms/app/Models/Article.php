<?php

namespace App\Models;

use App\Models\Traits\Common;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Spatie\Activitylog\Traits\LogsActivity;

class Article extends Model
{
    use Common, LogsActivity, Searchable;
    protected $fillable = ['title', 'content', 'user_id'];

    protected static $logFillable = true;
    protected static $recordEvents = ['created', 'updated'];
    protected static $logName = 'article';

    public function getTitle()
    {
        return $this->title;
    }

    public function getLink($param)
    {
        return route('edu.article.show', $this) . $param;
    }

    public function getMarkdownAttribute()
    {
        $Parsedown = new \Parsedown();
        return $Parsedown->text($this['content']);
    }
}
