<div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <form action="" method="post" wire:submit.prevent="save">
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" name="title" wire:model="title" class="form-control"  id="">
                        @error("title")
                            <span class="text-danger small">*{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">content</label>
                        <textarea name="content" id="" wire:model="content" cols="30" class="form-control" rows="10"></textarea>
                    @error("content")
                        <span class="text-danger small">*{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Save" class="btn btn-danger">
                    </div>
                </form>
            </div>
            <div class="col-lg-9">
                @if(session()->has("msg"))
                    <div class="alert alert-success alert-dismissible fade show ">
                        {{session("msg")}}
                        <button class="btn-close" type="button" data-bs-dismissable="alert"></button>
                    </div>
                @endif

                @if(session()->has("deletemsg"))
                        <div class="alert alert-danger alert-dismissible fade show ">
                            {{session("deletemsg")}}
                            <button class="btn-close" type="button" data-bs-dismissable="alert"></button>
                        </div>
                @endif

                <table class="table">
                    <tr class="">
                        <td>Id</td>
                        <td>Title</td>
                        <td>Contact</td>
                        <td>Action</td>
                    </tr>

                    @foreach ($posts as $p)
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->title}}</td>
                            <td>{{$p->content}}</td>
                            <td>
                                <button class="btn btn-danger" wire:click="deletePost({{$p->id}})" type='button'>x</button>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
