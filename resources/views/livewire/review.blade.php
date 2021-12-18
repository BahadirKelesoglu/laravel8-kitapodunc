<div>





            <div class="review-submission">

                <h3 class="tab-title">Submit your review</h3>
                <!-- Rate -->

                <div class="review-submit">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                    @endif

                    <form class="row" wire:submit.prevent="store">
                        @csrf

                        <div class="col-lg-6">
                            <input type="text" wire:model="subject" class="form-control" placeholder="Subject">
                            @error('subject') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-12">
                            <textarea wire:model="review" rows="10" class="form-control" placeholder="Your Review">
                            </textarea>
                            @error('review') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="rate">
                            @error('rate') <span class="text-danger">{{ $message }}</span>@enderror

                            <!--<div class="starrr" wire:model="rate" >

                            </div>-->
                        </div>
                        <div class="col-12">
                            @auth()
                            <button type="submit" class="btn btn-main">Submit</button>
                                @else
                            <a href="/login" class="add-button">For Submit Review Login</a>
                                @endauth
                        </div>
                    </form>
                </div>
            </div>



</div>
