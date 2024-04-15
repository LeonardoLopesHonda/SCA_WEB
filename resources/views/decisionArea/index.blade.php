<x-layout>
    <div class="container">
        <a href="{{ route('decisionArea.create') }}" class="btn btn-primary my-4 align-self-end"> New Project</a>
        <div class="container-fluid">
            @foreach ($decisionArea as $da)
                <div> <!-- Decision Area -->
                    <div class="container-sm btn-group-sm my-4 d-flex flex-row justify-content-between align-items-lg-center border border-black py-2 px-4 ">
                        <label for="" class="fs-4">{{ $da->label }}</label>
                        <div class="da-btns-container">
                            <a href="{{ route('decisionArea.create', $da) }}" class="btn btn-primary">SHAPE</a>
                            <a href="#" class="btn btn-primary disabled">DESIGN</a>
                            <a href="#" class="btn btn-primary disabled">COMPARE</a>
                            <a href="#" class="btn btn-primary disabled">CHOOSE</a>
                            <a href="{{ route('decisionArea.show', $da) }}" class="btn btn-primary disabled">REPORT</a>
                            <button class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>