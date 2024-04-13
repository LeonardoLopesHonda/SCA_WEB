<x-layout>
    <div class="container">
        <a href="{{ route('decisionArea.create') }}" class="btn btn-primary my-4"> new DA</a>
        <div class="container-fluid">
            @foreach ($decisionArea as $da)
                <div> <!-- Decision Area -->
                    <div class="">
                        {{ $da->da }}
                    </div>
                    <div class="container-sm btn-group-sm my-4 d-flex flex-row justify-content-between align-items-lg-center border border-black py-2 px-4 ">
                        <label for="" class="fs-4">{{ $da->label }}</label>
                        <div class="da-btns-container">
                            <a href="#" class="btn btn-primary">Open</a>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <button class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>