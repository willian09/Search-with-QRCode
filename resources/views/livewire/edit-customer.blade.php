<div class="card offset-3 col-6" style="margin-top: 20px">
    <div class="card-header" style="text-align: center; font-weight: bold; color:yellow; background-color:black">
        Edit Costumers
    </div>
    <div class="card-body">
        <form wire:submit='updateCustomer' class="row g-3">

            <div class="col-md-6">
                <label for="inputName" class="form-label">Full name</label>
                <input wire:model='name' type="text" class="form-control" id="inputName">
                <div>
                    @error('name')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <label for="inputBirthDate" class="form-label">Birth date</label>
                <input wire:model='birthDate' type="date" class="form-control" id="inputBirthDate">
                <div>
                    @error('birthDate')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input wire:model='email' type="email" class="form-control" id="inputEmail4">
                <div>
                    @error('email')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <label for="inputPhone" class="form-label">Phone</label>
                <input wire:model='phone' type="phone" class="form-control" id="inputPhone">
                <div>
                    @error('phone')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input wire:model='address' type="text" class="form-control" id="inputAddress">
                <div>
                    @error('address')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
            </div>  

            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input wire:model='city' type="text" class="form-control" id="inputCity">
                <div>
                    @error('city')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <input wire:model='state' type="text" class="form-control">
                <div>
                    @error('state')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input wire:model='zip' type="text" class="form-control" id="inputZip">
                <div>
                    @error('zip')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-12">
                <label for="inputBarcode" class="form-label">Barcode</label>
                <input wire:model='barcode' type="text" class="form-control" id="inputBarcode">
                <div>
                    @error('barcode')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
            </div>   

            <div style="text-align: center">
                <button wire:navigate href="/customers" class="btn btn-secondary">Back</button>
                <button type="submit" class="btn btn-success">Save changes</button>
            </div>
        </form>

    </div>
</div>

{{-- wire: href="/customers" --}}