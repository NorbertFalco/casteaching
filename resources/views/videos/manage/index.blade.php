<x-casteaching-layout>

    <div class="px-4 sm:px-6 lg:px-8">

        @can('videos_manage_create')
                <div class="md:grid md:grid-cols-1 md:gap-6">
                    <div class="md:col-span-1">
                        <h3 class="text-gray-900 font-medium text-lg leading-6">Vídeos</h3>
                        <p class="text-gray-600 text-sm mt-1">Informació bàsica del video</p>
                    </div>
                    <form class="px-4 py-5" data-qa="form_video_create" action="" method="POST">
                        <div class="shadow sm:rounded-md sm:overflow-hidden bg-white">
                            <div class="py-5">
                                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                <div class="mt-1">
                                    <input type="text" name="title" id="title"
                                           class="w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 placeholder:text-gray-500" placeholder="Títol del video">
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Títol curt del nostre video</p>
                            </div>
                            <div>
                                <label for="description"
                                       class="block text-sm font-medium text-gray-700">Description</label>
                                <div class="mt-1">
                                    <textarea name="description" id="description" cols="30" rows="10"
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
                                    <input id="url" name="url" type="text"
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
                                            <a href="/videos/{{$video->id}}" target="_blank"
                                               class="text-indigo-600 hover:text-indigo-900">
                                                Show</a>
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                Edit</a>
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                Delete</a>
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
