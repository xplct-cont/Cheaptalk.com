<div>
    {{-- Modal post Features --}}
    <div wire.ignore.self class="modal fade" id="click" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background-color: #2c70b1;" id="modall">
                <div class="modal-header text-center" style="background-color: #2c70b1;">
                    <h5 class="modal-title title1 text-white" id="exampleModalLabel">Creating post...</h5>
                    <button type="button"data-dismiss="modal"  style="background-color:maroon; color:white;" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <br>
                <select name="title" class="form-select bg-light text-dark" style="width: 200px; margin-left: 10px;" wire:model.defer="title">
                    <option hidden="true">Choose Category...</option>
                    <option value="Business">Business</option>
                    <option value="Education">Education</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Drama">Drama</option>
                    <option value="Horror">Horror</option>
                    <option value="Politics">Politics</option>
                    <option value="Religion">Religion</option>
                    <option value="Romance">Romance</option>
                </select>
                <br>
                <div class="modal-body bg-light rounded">
                    <textarea name="content" id="text-area" cols="50" rows="5" placeholder="Write some post..." wire:model.defer="content"></textarea>
                </div>
                @error('content')
                    <p class="text-danger text-center">{{ $message }}</p>
                @enderror
                <br>
                <div class="modal-footer bg-light">
                        <button type="button" id="submit-button" class="btn form-control" style="background-color: #2c70b1; color:white; width: 150px;" wire:click="addPost()"><div wire:loading><svg class="loading"></svg></div> Post</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end Modal post Features --}}

    {{-- modal delete post --}}
    <div wire:ignore.self class="modal fade" id="click-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content bg-light text-light"   id="modall">
                <div class="modal-header  bg-danger">
                    <h5 class="modal-title title3 text-light" style="font-weight: 400;" id="exampleModalLabel">Are you sure you want to delete this post?</h5>
                    <button type="button" style="background-color:maroon; color:white;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
               
                <div class="modal-footer">
                    <button type="button" id="submit-button" style="width: 150px;"  class="btn btn-danger form-control" wire:click="deletePost()">Delete Post</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal delete post --}}

    {{-- Modal edit feature --}}
    <div wire:ignore.self class="modal fade" id="click-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background-color: #2c70b1;" id="modall">
                <div class="modal-header">
                    <h5 class="modal-title title2 text-white" id="exampleModalLabel">Editing post...</h5>
                    <button type="button" style="background-color:maroon; color:white;"  data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <br>
                <select name="title" class="form-select bg-light text-dark" style="width: 200px; margin-left: 10px;" wire:model.defer="title">
                    <option hidden="true">Choose Category...</option>
                    <option value="Business">Business</option>
                    <option value="Education">Education</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Drama">Drama</option>
                    <option value="Horror">Horror</option>
                    <option value="Politics">Politics</option>
                    <option value="Religion">Religion</option>
                    <option value="Romance">Romance</option>
                </select>
                <br>
                <div class="modal-body bg-light rounded">
                    <textarea name="content" id="text-area" cols="50" rows="5" placeholder="Write some post..." wire:model.defer="content"></textarea>
                </div>
                @error('content')
                    <p class="text-danger text-center">{{ $message }}</p>
                @enderror
                <br>
                <div class="modal-footer bg-light">
                    <button type="button" id="submit-button" class="btn form-control" style="width: 200px; background-color:#2c70b1; color:white;" wire:click="updatePosts()"><div wire:loading><svg class="loading"></svg></div> Update Post</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end Modal edit feature --}}

    {{-- recent modal delete post --}}
    <div wire:ignore.self class="modal fade" id="click-delete-recent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" id="modall">
            <div class="modal-header bg-danger">
                <h5 class="modal-title title3 text-light" style="font-weight: 400;" id="exampleModalLabel">Are you sure you want to delete this post?</h5>
                <button type="button" style="background-color:maroon; color:white;" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-footer">
                <button type="button" id="submit-button" style="width: 150px;" class="btn btn-danger form-control" wire:click="deletePost()">Delete Post</button>
            </div>
            </div>
        </div>
    </div>
    {{-- end recent modal delete post --}}

    {{-- Recent Modal edit feature --}}
    <div wire:ignore.self class="modal fade" id="click-edit-recent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background-color: #2c70b1;" id="modall">
            <div class="modal-header" style="background-color:#2c70b1;">
                <h5 class="modal-title title2 text-white">Editing post...</h5>
                <button type="button" style="background-color:maroon; color:white;" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <br>
            <select name="title" class="form-select bg-light shadow-lg" style="width: 200px; margin-left: 10px;" id="rm" wire:model.defer="title">
                <option hidden="true">Choose Category...</option>
                <option value="Business">Business</option>
                <option value="Education">Education</option>
                <option value="Comedy">Comedy</option>
                <option value="Drama">Drama</option>
                <option value="Horror">Horror</option>
                <option value="Politics">Politics</option>
                <option value="Religion">Religion</option>
                <option value="Romance">Romance</option>
            </select>
            <br>
            <div class="modal-body bg-light text-dark">
                <textarea name="content" id="text-area" cols="50" rows="5" placeholder="Write some post..." wire:model.defer="content"></textarea>
            </div>
            @error('content')
                <p class="text-danger text-center">{{ $message }}</p>
            @enderror
            <br>
            <div class="modal-footer bg-light">
                <button type="button" id="submit-button"   class="btn form-control" style="background-color: #2c70b1; color:white; width: 150px;" wire:click="updatePosts()"><div wire:loading><svg class="loading"></svg></div> Update Post</button>
            </div>
            </div>
        </div>
    </div>
    {{-- end Recent Modal edit feature --}}
</div>


<style>
    .loading {
        border: 5px solid rgba(255, 255, 255, 0.359);
        border-radius: 50%;
        width: 25px;
        height: 25px;
        border-top: 5px solid rgb(246, 246, 246);
        animation: rotate 0.8s infinite;
        justify-items: center;
        display: inline-block;
    }
    @keyframes rotate {
        0% {transform: rotate(0deg);}
        100% {transform: rotate(360deg);}
    }
</style>
