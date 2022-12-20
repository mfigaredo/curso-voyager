<x-app-layout>
    <div class="max-w-4xl px-4 mx-auto sm:px-6  lg:px-8 py-12">

      <h1 class="text-2xl font-semibold my-4 text-center">{{ setting('site.title') }}</h1>
      <h2 class="text-xl font-semibold">{{ setting('site.description') }}</h2>

      <br>
      <ul class="space-y-8">
        @foreach ($posts as $post)
            <li>
              <article>
                <h1 class="text-2xl font-semibold">
                  <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                </h1>

                <figure>
                  <img src="{{ Voyager::image($post->image) }}" alt="" class="aspect-[3/1] object-cover">
                </figure>
                <p>
                  {{ $post->excerpt }}
                </p>
              </article>
            </li>
        @endforeach
      </ul>

      {{ $posts->links() }}
    </div>

</x-app-layout>