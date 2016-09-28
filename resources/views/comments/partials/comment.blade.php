<div class="media">
    <div class="media-left">
        <div style="width: 25px; height: 25px;"></div>
        {{--<a href="#">--}}
            {{--<img class="media-object" src="..." alt="...">--}}
        {{--</a>--}}
    </div>
    <div class="media-body">
        <h4 class="media-heading">
            {{ $comment->owner->name }}
            <div class="text-muted pull-right">
                {{ \Carbon\Carbon::now()->diffForHumans($comment->created_at, true) }} ago
            </div>
        </h4>
        <p>
            {{ $comment->body }}
            <a type="button" class="pull-right" data-toggle="collapse" data-target="#comment{{ $comment->id }}" aria-expanded="false" aria-controls="comment{{ $comment->id }}">
                Add comment
            </a>
        </p>

        <div class="collapse" id="comment{{ $comment->id }}">
            <div class="well">
                @include('comments.partials.form', ['label' => 'Reply', 'parent' => $comment->id] )
            </div>
        </div>

        @if(isset($comments[$comment->id]))
            @include('comments.partials.list', ['list' => $comments[$comment->id]])
        @endif
    </div>
</div>
