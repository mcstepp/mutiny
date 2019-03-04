@if($thread->pinned)
    <div class="card m-thread bg-industrial glow-default">
@else
    <div class="card m-thread bg-industrial">
@endif
    <div class="card-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="callout callout-primary">
                        <h3 class="m-fancy-title neon-default text-uppercase">
                            @if($thread->pinned)
                                <i class="fas fa-thumbtack neon-default"></i>
                            @else
                                <i class="fas fa-terminal neon-default"></i>
                            @endif


                            <a class="flicker" href="{{ $thread->path() }}"> {{ $thread->title }}</a>
                        </h3>
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
                        <span class="badge badge-pill badge-info m-1">Info</span>
                        <span class="badge badge-pill badge-primary m-1">Primary</span>
                        <span class="badge badge-pill badge-secondary m-1">Secondary</span>
                        <span class="badge badge-pill dauntless-bg m-1"><i class="fas fa-fire"></i> Dauntless</span>
                        <span class="badge badge-pill abnegation-bg m-1"><i class="fas fa-hands-helping"></i> Abnegation</span>
                        <span class="badge badge-pill candor-bg m-1"><i class="fas fa-balance-scale"></i> candor</span>
                        <span class="badge badge-pill erudite-bg m-1"><i class="fas fa-eye"></i> Erudite</span>
                        <span class="badge badge-pill factionless-bg m-1"><i class="fas fa-fist-raised"></i> Factionless</span>
                        <span class="badge badge-pill amity-bg m-1"><i class="fas fa-leaf"></i> Amity</span>
                        <span class="badge badge-pill badge-light m-1">Light</span>
                        <span class="badge badge-pill badge-dark m-1">Dark</span>
                    </div>
                    <div class="callout callout-primary">
                        <p><small class="m-fancy-title text-uppercase">Participants</small></p>

                        @foreach($thread->participants() as $post)
                            <a href="{{ $post->author->path() }}" class="m-thread-participant">
                                @include("graphics._icon", [
                                    'author' => $post->author,
                                    'type' => strtolower(class_basename($post->author)),
                                    'size' => 50,
                                    'hide'
                                ])
                            </a>
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
                    <show-more thread="{{ $thread->id }}" collapse></show-more>
                </div>
                <div class="col text-right">
                    @can('update', $thread)
                        <a href="{{ route('edit-thread', [$forum, $thread]) }}" class="btn btn-outline-primary m-1">
                        <i class="fas fa-cog" aria-hidden="true"></i>
                        Edit
                    </a>
                    @endcan

                    @can('pin', $thread)
                    <pin-button :thread="{{ json_encode($thread)}}"></pin-button>
                    @endcan

                    @can('lock', $thread)
                    <lock-button :thread="{{ json_encode($thread)}}"></lock-button>
                    @endcan

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