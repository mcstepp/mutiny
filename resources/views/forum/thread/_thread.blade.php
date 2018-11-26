<div class="card m-thread bg-industrial">

    <div class="card-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="callout callout-primary">
                        <h4 class="h3 m-fancy-title neon-default text-uppercase">
                            <i class="fas fa-terminal neon-default"></i><a class="flicker" href="{{ $thread->path() }}"> {{ $thread->title }}</a>
                        </h4>
                        <small class="font-xs">Last reply {{ $thread->lastPost->created_at->diffForHumans() }} on {{ $thread->lastPost->created_at->format('M j, Y') }}</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="callout callout-primary">
                        <small class="m-fancy-title text-uppercase">Last Reply by:</small><br>
                        <a href="{{ $thread->lastPost->author->path() }}"
                           class="flicker dauntless">
                            {{ $thread->lastPost->author->username }}
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="callout callout-primary">
                        <small class="m-fancy-title text-uppercase">Replies:</small><br>
                        <strong>{{ $thread->post_count - 1 }}</strong>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="callout callout-primary">
                        <small class="m-fancy-title text-uppercase">Views:</small><br>
                        <strong>{{ $thread->participant_count }}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body collapse" id="thread{{ $thread->id }}">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 align-self-center">
                    <div class="callout callout-primary text-uppercase">
                        <p><small class="m-fancy-title text-uppercase">Tags:</small></p>
                        <span class="badge badge-pill badge-info m-1">Info:</span>
                        <span class="badge badge-pill badge-primary m-1">Primary</span>
                        <span class="badge badge-pill badge-secondary m-1">Secondary</span>
                        <span class="badge badge-pill dauntless-bg m-1">Dauntless</span>
                        <span class="badge badge-pill abnegation-bg m-1">Abnegation</span>
                        <span class="badge badge-pill candor-bg m-1">candor</span>
                        <span class="badge badge-pill erudite-bg m-1">Erudite</span>
                        <span class="badge badge-pill factionless-bg m-1">Factionless</span>
                        <span class="badge badge-pill amity-bg m-1">Amity</span>
                        <span class="badge badge-pill badge-light m-1">Light</span>
                        <span class="badge badge-pill badge-dark m-1">Dark</span>
                    </div>
                    <div class="callout callout-primary">
                        <p><small class="m-fancy-title text-uppercase">Participants</small></p>

                        @foreach($thread->participants() as $post)
                            <a href="{{ $post->author->path() }}" class="m-thread-participant"><img src="http://placehold.it/50"></a>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="callout callout-primary">
                        <small class="m-fancy-title text-uppercase">Started by:</small><br>
                        <a href="{{ $thread->firstPost->author->path() }}"
                           class="flicker dauntless">
                            {{ $thread->firstPost->author->username }}
                        </a>
                    </div>
                    <div class="callout callout-primary">
                        <small class="m-fancy-title text-uppercase">Description:</small><br>
                        <h5 class="m-fancy-header neon-default">May 30, YR 150</h5>
                        <p>{{ $thread->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-bottom py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <button class="btn btn-outline-primary m-1"  data-toggle="collapse" data-target="#thread{{$thread->id}}">
                        <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                        Expand
                    </button>
                </div>
                <div class="col text-right">
                    @can('update', $thread)
                        <a href="{{ route('edit-thread', [$forum, $thread]) }}" class="btn btn-outline-primary m-1">
                        <i class="fas fa-cog" aria-hidden="true"></i>
                        Edit
                    </a>
                    @endcan

                    <button class="btn btn-outline-success m-1">
                        <i class="fas fa-thumbtack" aria-hidden="true"></i>
                        Pin
                    </button>

                    <button class="btn btn-outline-warning m-1">
                        <i class="fas fa-lock" aria-hidden="true"></i>
                        Lock
                    </button>

                    @can('delete', $thread)
                        <delete-button
                                :thread="{{ json_encode($thread) }}"
                                :forum="{{ json_encode($forum) }}"
                                deleteType="thread" >
                        </delete-button>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>