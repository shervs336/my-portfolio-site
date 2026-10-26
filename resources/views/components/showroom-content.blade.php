
@if($work->website_link)
    <a
        href="{{ $work->website_link }}"
        target="_blank"
        rel="noopener noreferrer"
        class="group mx-auto block max-w-sm overflow-hidden rounded-lg
              border border-gray-200 bg-white shadow-md
              transition-all duration-300 ease-in-out
              hover:-translate-y-2 hover:scale-[1.02] hover:shadow-xl
              focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500
              dark:border-slate-700 dark:bg-slate-800/70 dark:shadow-none
              dark:hover:border-slate-600"
    >
        <img
            class="aspect-video w-full object-cover transition-transform duration-500 ease-in-out group-hover:scale-105"
            src="{{ asset('storage/' . $work->background_image_path) }}"
            alt="{{ $work->title }}"
            loading="lazy"
        >

        <div class="bg-white px-6 py-4 dark:bg-slate-800/70">
            <h3 class="mb-2 text-xl font-semibold text-gray-900 transition-colors duration-300 group-hover:text-blue-700 dark:text-slate-100 dark:group-hover:text-blue-400">
                {{ $work->title }}
            </h3>

            <p class="text-base text-gray-600 dark:text-slate-300">
                {{ $work->caption }}
            </p>
        </div>

        <div class="bg-white px-6 pt-4 pb-2 dark:bg-slate-800/70">
            @if($work->stack)
                @foreach(explode(',', $work->stack) as $tech)
                    @php($tech = trim($tech))

                    @if($tech !== '')
                        <span class="tag-default tag-{{ $tech }} mb-2 mr-2 inline-block rounded-full px-3 py-1 text-xs font-semibold uppercase tracking-wider">
                            {{ $tech }}
                        </span>
                    @endif
                @endforeach
            @endif
        </div>
    </a>
@else
    <div
      class="mx-auto max-w-sm overflow-hidden rounded-lg
            border border-gray-200 bg-white shadow-md
            dark:border-slate-700 dark:bg-slate-800/70 dark:shadow-none"
    >
        <img
            class="aspect-video w-full object-cover"
            src="{{ asset('storage/' . $work->background_image_path) }}"
            alt="{{ $work->title }}"
            loading="lazy"
        >

        <div class="px-6 py-4">
            <h3 class="mb-2 text-xl font-semibold text-gray-900 dark:text-slate-100">
                {{ $work->title }}
            </h3>

            <p class="text-base text-gray-600 dark:text-slate-300">
                {{ $work->caption }}
            </p>
        </div>

        <div class="px-6 pt-4 pb-2">
            @if($work->stack)
                @foreach(explode(',', $work->stack) as $tech)
                    @php($tech = trim($tech))

                    @if($tech !== '')
                        <span class="tag-default tag-{{ $tech }} mb-2 mr-2 inline-block rounded-full px-3 py-1 text-xs font-semibold uppercase tracking-wider">
                            {{ $tech }}
                        </span>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
@endif
