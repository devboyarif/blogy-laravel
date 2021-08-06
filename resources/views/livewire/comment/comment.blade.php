<section class="comments-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h5>Leave a Comment</h5>
                <div style="display: none" x-data='{show:false}' x-show="show"
                    x-init="@this.on('created', () =>{ show = true; setTimeout(() => { show = false },2000)})"
                    class="alert alert-success">
                    {{ session('success') }}
                </div>
                <form wire:submit.prevent="storeComment">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <input required wire:model="name" autocomplete="off" type="text"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Your name">
                            @error('name') <span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-lg-6">
                            <input required wire:model="email" autocomplete="off" type="email"
                                class="form-control @error('email') is-invalid @enderror" placeholder="Your email">
                            @error('email') <span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <textarea required wire:model="body" autocomplete="off"
                        class="form-control @error('body') is-invalid @enderror" placeholder="Your Comments"></textarea>
                    @error('body') <span class="invalid-feedback">{{ $message }}</span>@enderror
                    <div class="d-flex justify-content-lg-end">
                        <button type="submit" class="btn-default">Post Commnent</button>
                    </div>
                </form>
                @if ($total != 0)

                    <div class="comments-area-content">
                        <h5>Comments <span>({{ $total }})</span></h5>
                        @foreach ($comments as $comment)
                            <div class="comments">
                                <div class="comments-owner">
                                    <div class="comments-owner-image">
                                        <a href="javascript:void(0)" class="d-block">
                                            <img src="{{ asset('backend/image/default.png') }}" alt="Image">
                                        </a>
                                    </div>
                                    <div class="comments-owner-text">
                                        <p><a href="#">{{ $comment->name }}</a></p>
                                        <span>{{ $comment->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                                <p>
                                    {{ $comment->body }}
                                </p>
                            </div>
                        @endforeach

                    </div>
                @endif
                @if ($loadbutton && $total >= 5)
                    @if (count($comments) >= $total)
                        <div class="text-center">No more comment found</div>
                    @else
                        <div class="text-center mt-3">
                            <button wire:click="load" wire:loading.remove class="btn btn-primary">Load More
                                Data</button>
                            <button wire:loading class="btn btn-primary">
                                <i class="fas fa-circle-notch fa-spin"></i>
                                &nbsp;Loading
                            </button>
                        </div>
                    @endif
                @endif
                {{-- @if ()

                <h5>Write a Replay</h5>
                <form action="#">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <input type="text" class="form-control" placeholder="Your name">
                        </div>
                        <div class="col-lg-6">
                            <input type="email" class="form-control" placeholder="Your email">
                        </div>
                    </div>
                    <textarea class="form-control" placeholder="Your Comments"></textarea>
                    <div class="d-flex justify-content-lg-end">
                        <button type="submit" class="btn-default">Post Commnent</button>
                    </div>
                </form>
                @endif --}}
            </div>
        </div>
    </div>
</section>
