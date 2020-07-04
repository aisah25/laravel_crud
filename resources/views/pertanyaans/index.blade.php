@extends('../layouts/master')
@section('content')
<section class="section background-white">
            @foreach ($pertanyaans as $pertanyaan)
            <div class="line margin-bottom-30">
                <div class="margin">
                    <div class="s-12 m-12 margin-m-bottom">
                        <div class="padding-2x block-bordered border-radius">
                            <div class="line">
                                <h2 class="text-size-30 ">{!! $pertanyaan->judul !!}</h2>
                                <br>
                                <br>
                                <a class="button button-dark-stroke text-size-12" href="{{route('pertanyaans.show', $pertanyaans->id)}}">Detail</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <{{$pertanyaan->links()}}
        </section>

    </article>
</main>

@endsection