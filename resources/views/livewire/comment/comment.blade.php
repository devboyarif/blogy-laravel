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
                <div class="comments-area-content">
                    <h5>Comments <span>(02)</span></h5>
                    <div class="comments">
                        <div class="comments-owner">
                            <div class="comments-owner-image">
                                <a href="#" class="d-block">
                                    <img src="dist/images/cowner.png" alt="Image">
                                </a>
                            </div>
                            <div class="comments-owner-text">
                                <p><a href="#">Kevin</a></p>
                                <span>2 hours ago</span>
                            </div>
                        </div>
                        <p>
                            Donec pellentesque luctus tortor finibus blandit. Fusce tincidunt lectus augue, quis commodo
                            justo tincidunt eget. Praesent at elit diam.
                        </p>
                    </div>
                    <div class="comments">
                        <div class="comments-owner">
                            <div class="comments-owner-image">
                                <a href="#" class="d-block">
                                    <img src="dist/images/cowner.png" alt="Image">
                                </a>
                            </div>
                            <div class="comments-owner-text">
                                <p><a href="#">Marry</a></p>
                                <span>2 hours ago</span>
                            </div>
                        </div>
                        <p>
                            Nulla varius enim eu dui venenatis, nec lacinia urna gravida. Vivamus euismod tincidunt eros
                            at bibendum. Proin lacus dolor, posuere et posuere eu, congue posuere lectus. Suspendisse id
                            lorem egestas, volutpat lacus a, auctor justo. Cras ac elementum arcu, eget ornare massa.
                            Donec eget urna magna. Fusce vestibulum arcu eu libero ullamcorper, nec semper dolor
                            bibendum. Mauris laoreet justo massa, vitae venenatis augue dignissim ac.
                        </p>
                    </div>
                </div>
                {{-- <h5>Write a Replay</h5>
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
                </form> --}}
            </div>
        </div>
    </div>
</section>
