<nav class="navbar navbar-expand-lg bg-body-tertiary" style="width: 100%; padding: 0;" >
    <div class="container-fluid" style="background-color: rgb(0, 0, 0);">
        <a class="navbar-brand" style="font-size: 48px; color:yellow" href="/home"><ion-icon name="beer-outline"></ion-icon></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                @guest
                    <li class="nav-item">
                        <a style="color:yellow; font-weight:bold" class="nav-link active" wire:navigate href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a style="color:yellow; font-weight:bold" class="nav-link active" wire:navigate href="/register">Register</a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item">
                        <a style="color:yellow; font-weight:bold" class="nav-link active" aria-current="page" wire:navigate href="/customers">Customers</a>
                    </li>
                    <li class="nav-item">
                        <button style="color:yellow; font-weight:bold" class="nav-link" wire:click='logout'>Logout</button>
                    </li>
                @endauth
            </ul>          
        </div>
    </div>
</nav>
