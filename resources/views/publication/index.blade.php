<x-master title="publications">



    <section class="bg-light rounded">
        <div class="container my-5 py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <h4 class="mb-0 p-2 mb-2">Recent publications</h4>
                    <div class="card text-dark">
                            @foreach ($publications as $publication)
                            <x-publication-card :publication="$publication" />
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{ $publications->links() }}



    {{-- <div class="row">

    </div> --}}
</x-master>
