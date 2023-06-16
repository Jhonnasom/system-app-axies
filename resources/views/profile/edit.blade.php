<x-app-layout>
    <x-slot name="title">Profile</x-slot>
    <x-slot name="subpage">Pages</x-slot>
    <x-slot name="sub_subpage">Profile</x-slot>
    <div class="bg-[#14141f] flex flex-col items-center">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
{{--                Form to Upload Image Profile--}}
                <form action="/profile/image" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <x-input-label for="img" class="flex flex-col gap-y-5 pointer-events-none" value="Upload File">
                        {{--                    Campo de input Upload File--}}
                        <x-slot name="input">
                            {{--                        Div contenedor del Input File--}}
                            <div
                                class="px-[60px] flex justify-between items-center py-10 border-[1px] border-[#343444] rounded-[8px] text-[14px] text-[#8A8AA0] font-normal">
                                PNG, JPG, GIF, WEBP or MP4. Max 200mb.
                                {{--                           Div para el buttom de Upload File --}}
                                <div
                                    class="flex justify-center items-center py-4 border-[#FFFFFF] border-[1.5px] font-bold text-white text-[15px] rounded-[56px] px-[40px] cursor-pointer pointer-events-auto">
                                    Upload Image
                                </div>
                            </div>
                            {{--                        Input Type File para IMG--}}
                            <x-text-input name="image" id="img"  type="file" accept="image/png, image/jpg, image/gif, image/jpeg" class="hidden"/>
                        </x-slot>
                    </x-input-label>
                    <x-primary-button class="px-8 mt-4">{{ __('Save') }}</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
