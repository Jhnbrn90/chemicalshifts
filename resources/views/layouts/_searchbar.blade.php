<div class="flex justify-center">
        <div class="flex-col">
            <div id="nucleus" class="flex justify-center mb-3">
                <select-nucleus @nucleus-selected="setNucleus"></select-nucleus>
            </div>

            <div id="solvent" class="flex justify-center mb-4">
                <select-solvent @solvent-selected="setSolvent"></select-solvent>
            </div>

            <form @submit.prevent="searchShift" autocomplete="off">
                <div class="flex justify-center mb-6">
                    <div class="w-screen flex justify-center">
                        <input v-model="shift" id="search" name="shift" class="mt-4 text-grey-darkest text-lg font-thin border h-12 shadow hover:shadow-md w-4/5 sm:w-1/3 px-4 py-2 mr-3 text-center" type="text" placeholder='Search for chemical shift ("2.01")' required autofocus>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="w-screen flex justify-center">
                        <button class="bg-grey-lighter border border-white text-grey-dark hover:border-grey hover:text-grey-darkest px-4 py-2 rounded text">Search</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
