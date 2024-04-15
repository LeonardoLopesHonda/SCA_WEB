<x-layout>
    <div class="container my-5 row d-flex m-auto gap-2">
        <main class="col-6 border border-black p-4 fs-4">
            <h1>ADD DECISION AREA</h1>
            <hr>
            <form action="POST" class="container d-flex flex-column  gap-4 row">
                <div class="d-flex flex-column row w-75">
                    <label for="label" class="form-label">Label</label>
                    <input type="text" name="label" placeholder="Decision Area name" class="form-text py-1">
                </div>
                <div class="d-flex flex-column row w-75">
                    <label for="label" class="form-label">Description</label>
                    <textarea name="description" id="description" rows="6" class="form-text"></textarea>
                </div>
                <div class="d-flex flex-column row w-75">
                    <label for="urgency" class="form-label">Urgency</label>
                    <span class="d-flex gap-2">0<input type="range" name="urgency" id="urgency" min="0" max="10" class="form-range">10</span>
                    <label for="importancy" class="form-label">Importancy</label>
                    <span class="d-flex gap-2">0<input type="range" name="importancy" id="importancy" min="0" max="10" class="form-range">10</span>
                </div>
                <input type="button" value="ADD" class="col-2 p-2 rounded-1 btn btn-primary">
            </form>
        </main>
        <section class="col-5 border border-black">
            <h1>List</h1>
            <ul class="fa-ul">
                @foreach ($decisionArea as $da)
                    <li>{{ $da->label }}</li>
                @endforeach
            </ul>
        </section>
    </div>
</x-layout>
