<div>
    <nav class="navbarheader1 navbar-expand-lg rounded mb-0" aria-label="navbarheader1">
        <div class="container-fluid  my-2 px-4">
            <div class="collapse navbar-collapse justify-content-center" id="navbarheader1">
                <form class="mt-2" style="width: 22%; margin-left: 5em;" role="search">
                    <input wire:model.debounce.500ms="search" class="form-control" type="search" placeholder="Cari film yang ingin kamu temukan" aria-label="Search">
                </form>

            </div>
            <div class="absolute text-center">
                <ul class="list-unstyled mx-4 my-4 px-3 ">
                    @foreach($searchResults as $result)
                    <li class="border-b border-dark rounded bg-secondary bg-opacity-10 py-4 px-5 mx-5">
                        <a href="/{{$result->slug}}" class="text-dark text-decoration-none">{{$result->title}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>

    </nav>
</div>
