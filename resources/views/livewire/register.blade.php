<div class="card offset-3 col-6" style="margin-top: 20px">
    <div class="card-header" style="text-align: center; font-weight: bold; color:yellow; background-color:black">
        Register
    </div>
    <div class="card-body">
        <form wire:submit='storeUser'>
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Name</label>
                <input wire:model='name' type="name" class="form-control" id="exampleInputName1"
                    aria-describedby="nameHelp">
                <div>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input wire:model='email' type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input wire:model='password' type="password" class="form-control" id="exampleInputPassword1">
                <div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button wire:navigate href="/home" class="btn btn-secondary">Back</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="mb-3" style="margin: auto; text-align: center;">
            <p>Already have an account?</p> 
            <button wire:navigate href="/login" class="btn btn-success ">
                Login
            </button>
        </div>
    </div>
</div>
