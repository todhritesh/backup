<div>
    <form  wire:submit.prevent="find">
        @csrf
        <div class="row">
                <div class="col-8">
                    <div class="mb-3">
                        <label for="">Select student</label>
                        <input type="text" wire:model="rfcode" class="form-control" placeholder="scan code here">
                    </div>
                </div>
                @if ($students != NULL)

                <div class="col-4">
                    <div class="mb-3">
                        <label for="">Roll</label>
                        <input type="text" class="form-control" value="{{$students->id}}" disabled>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" value="{{$students->name}}" disabled>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="text" class="form-control" value="{{$students->email}}" disabled>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="">Aadhaar</label>
                        <input type="text" class="form-control" value="{{$students->aadhaar}}" disabled>
                    </div>
                </div>


                @endif

                <div class="col-12">
                    <div class="row">
                        <div class="col">
                            <h5>Select Books</h5>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>ISBN</th>
                            <th>Book</th>
                            <th>Date</th>
                            <th>Qty</th>
                            <th>Amount</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" wire:change="isbnFind" wire:model="isbn" class="form-control" placeholder="scan  ISBN">
                            </td>
                            <td>
                                <input type="text" class="form-control" value="@if($books != NULL) {{$books->title}} @endif" disabled>
                            </td>
                            <td>
                                <input type="date" class="form-control">
                            </td>
                            <td>
                                <input type="number" class="form-control" wire:change="qtyUp" wire:model="qty" value="1" min="1" max="5">
                            </td>
                            <td>
                                <input type="text" class="form-control" value="@if($books != NULL) {{$total}} @else 0 @endif" disabled>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" rowspan="5"></td>
                            <td>Total Amount</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>Membership Charge</td>
                            <td>{{$membership}}</td>
                        </tr>
                        <tr>
                            <td>Discount</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Payment Amount</td>
                            <td><h4>₹{{$payable_amount}}/-</h4></td>
                        </tr>

                        </table>
                </div>

        </div>
        <button type="submit">click</button>
    </form>

    <div class="card-footer mt-3">
        <button type="submit" class="btn btn-danger float-end" wire:click="create_order">Save</button>
    </div>
</div>
