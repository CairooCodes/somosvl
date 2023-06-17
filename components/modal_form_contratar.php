<div id="addUserModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-5rem)] md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <!-- Modal content -->
        <form action="./admin/controllers/add_lead.php" method="post" class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t">
                <h3 class="text-lg font-extrabold text-fuchsia-900">
                    Preencha os campos para solicitar contratação!
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="addUserModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <div class="">
                    <div class="">
                        <label class="block my-2 text-md font-base text-gray-800">Nome e Sobrenome</label>
                        <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="Seu nome e sobrenome" required="">
                        <label class="block my-2 text-md font-base text-gray-800 pt-2">WhatsApp</label>
                        <input type="text" name="whatsapp" id="whatsapp" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="Número de celular" required="">
                        <input type="hidden" name="type" id="type" value="3">
                        <button type="submit" class="text-white bg-fuchsia-900 mt-3 w-full hover:bg-color2 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Enviar</button>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="border-t border-gray-200 rounded-b">
                    <p class="pt-4 text-center">ou se preferir</p>
                    <a href="https://wa.me/558008884004">
                        <button class="w-full text-white bg-color2 mt-5 hover:bg-color1 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Contato pelo WhatsApp</button>
                    </a>
                </div>
        </form>
    </div>
</div>