
@if($work->website_link)
  <a href="{{ $work->website_link }}"
     target="_blank"
     rel="noopener noreferrer"
     class="group block max-w-sm overflow-hidden rounded shadow-lg
            brightness-95 transition-all duration-300 ease-in-out
            hover:-translate-y-2 hover:scale-[1.02]
            hover:brightness-100 hover:shadow-2xl
            focus:outline-none focus:ring-2 focus:ring-blue-500">

    <img
      class="aspect-video w-full object-cover transition-transform duration-500 ease-in-out group-hover:scale-105"
      src="{{ asset('storage/' . $work->background_image_path) }}"
      alt="{{ $work->title }}"
    >

    <div class="bg-white px-6 py-4 dark:bg-gray-800">
      <div class="mb-2 text-xl font-semibold transition-colors duration-300 group-hover:text-blue-500">
        {{ $work->title }}
      </div>

      <p class="text-base text-gray-400">
        {{ $work->caption }}
      </p>
    </div>

    <div class="bg-white px-6 pt-4 pb-2 dark:bg-gray-800">
      @if($work->stack)
        @foreach(explode(',', $work->stack) as $tech)
          @php($tech = trim($tech))

          <span class="tag-default tag-{{ $tech ?: 'default' }} mb-2 mr-2 inline-block rounded-full px-3 py-1 text-xs font-semibold uppercase tracking-wider">
            {{ $tech }}
          </span>
        @endforeach
      @endif
    </div>

  </a>
@else
  <div class="max-w-sm overflow-hidden rounded shadow-lg brightness-95">
    <img
      class="aspect-video w-full object-cover"
      src="{{ asset('storage/' . $work->background_image_path) }}"
      alt="{{ $work->title }}"
    >

    <div class="px-6 py-4">
      <div class="mb-2 text-xl font-semibold">{{ $work->title }}</div>
      <p class="text-base text-gray-400">{{ $work->caption }}</p>
    </div>

    <div class="px-6 pt-4 pb-2">
      @if($work->stack)
        @foreach(explode(',', $work->stack) as $tech)
          @php($tech = trim($tech))
          <span class="tag-default tag-{{ $tech ?: 'default' }} mb-2 mr-2 inline-block rounded-full px-3 py-1 text-xs font-semibold uppercase tracking-wider">
            {{ $tech }}
          </span>
        @endforeach
      @endif
    </div>
  </div>
@endif
