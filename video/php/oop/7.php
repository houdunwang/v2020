<?php
trait Site
{
    public function getSiteName()
    {
        return 'houdunren.com';
    }
}
trait Log
{
    public function save()
    {
        return __METHOD__;
    }
}
trait Comment
{
    use Site;
    abstract public function name();
    public static function show()
    {
        return 'show...static';
    }
    public function save()
    {
        return __METHOD__;
    }
}
class Topic
{
    use Log, Comment {
    Log::save insteadof Comment;
    // Log::save as protected;
    Comment::save as send;
    }
    public function name()
    { }
}
echo Topic::show();
// $topic = new Topic;
// echo $topic->show();
