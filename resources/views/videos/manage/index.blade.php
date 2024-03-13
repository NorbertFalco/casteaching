<x-casteaching-layout>

    <div class="px-4 sm:px-6 lg:px-8">
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
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-3">
                                Id</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                Title</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                Description</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                URL</th>
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

</x-casteaching-layout>
