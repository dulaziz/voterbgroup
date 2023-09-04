<div class="border border-slate-300 p-3 shadow-sm">
    <div class="mb-3 h-60 overflow-hidden place-items-center flex">
        {{$img}}
    </div>
    <div>
        <h2 class="font-semibold text-xl mb-3">{{$title}}</h2>
        <p class="line-clamp-3 mb-6">{{$excerpt}}</p>
        
        <div class="flex flex-col gap-3">
            {{$button}}
        </div>

    </div>
</div>