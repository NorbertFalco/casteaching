<x-casteaching-layout>

    <div class="px-4 sm:px-6 lg:px-8">

        @if(session()->has('status'))
            <!-- Alert -->
            <div class="rounded-md bg-green-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800">Successfully created</p>
                </div>
                <div class="ml-auto pl-3">
                    <div class="-mx-1.5 -my-1.5">
                        <button type="button" class="inline-flex rounded-md bg-green-50 p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50">
                            <span class="sr-only">Dismiss</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
            <!-- End Alert -->
        @endif
        @can('videos_manage_create')
                <div class="md:grid md:grid-cols-1 md:gap-6">
                    <div class="md:col-span-1">
                        <h3 class="text-gray-900 font-medium text-lg leading-6">Vídeos</h3>
                        <p class="text-gray-600 text-sm mt-1">
                            Informació bàsica del video</p>
                    </div>
                    <form data-qa="form_video_create" action="" method="POST">
                        @csrf
                        <div class="shadow sm:rounded-md sm:overflow-hidden bg-white">
                            <div class="py-5">
                                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                <div class="mt-1">
                                    <input required type="text" name="title" id="title"
                                           class="w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 placeholder:text-gray-500" placeholder="Títol del video">
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Títol curt del nostre video</p>
                            </div>
                            <div>
                                <label for="description"
                                       class="block text-sm font-medium text-gray-700">Description</label>
                                <div class="mt-1">
                                    <textarea required name="description" id="description" cols="30" rows="10"
                                              class="w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 placeholder:text-gray-500" placeholder="Descripció del video"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Descripció del video</p>
                            </div>
                            <div>
                                <label for="url" class="block text-sm font-medium text-gray-700">URL</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                            <span
                                class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-300 text-gray-500 text-sm">
                                https://
                            </span>
                                    <input required id="url" name="url" type="url"
                                           class="w-full rounded-md focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300"
                                           placeholder="tubeme.acacha.org/php">
                                </div>
                            </div>
                            <div class="px-4 py-3 text-right">
                                <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Crear
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                @endcan


                <div class="sm:flex sm:items-center">
                </div>
                <div class="mt-8 flow-root">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block w-full py-2 align-middle sm:px-6 lg:px-8">
                            <div class="bg-white px-4 py-3 border-b border-gray-200 sm:rounded-lg">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Videos
                                </h3>
                            </div>
                            <table class="w-full divide-y divide-gray-300 ">
                                <thead>
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-3">
                                        Id
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Title
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Description
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        URL
                                    </th>
                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-3">
                                        <span class="sr-only">Actions</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white">
                                @foreach($videos as $video)
                                    <tr class="even:bg-gray-50">
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-3">
                                            {{ $video->id }}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $video->title }}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $video->description }}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $video->url }}</td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-3">
                                            <a href="/videos/{{$video->id}}" target="_blank" class="text-indigo-600 hover:text-indigo-900">
                                                Show
                                            </a>
                                            <a href="/manage/videos/{{$video->id}}" target="_blank" class="text-indigo-600 hover:text-indigo-900">
                                                Edit
                                            </a>
                                            <form class="inline" action="/manage/videos/{{$video->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <a href="/videos/{{$video->id}}" class="text-indigo-600 hover:text-indigo-900"
                                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">Delete</a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</x-casteaching-layout>
