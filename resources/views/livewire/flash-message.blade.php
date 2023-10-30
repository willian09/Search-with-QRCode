<div>
@if (session()->has('success'))
    <div style="text-align: center" class="alert alert-success">
        {{ session('success') }}    
    </div>    
@endif
</div>
