<?php
trait Log
{
    public function save()
    {
        return __METHOD__;
    }
}
trait Comment
{
    public function total()
    {
        return __METHOD__;
    }
}
class Site
{
    public function total()
    {
        return __METHOD__;
    }
}
class Topic extends Site
{
    use Log, Comment;
}
$topic = new Topic;
echo $topic->total();
