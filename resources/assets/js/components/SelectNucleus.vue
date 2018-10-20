<template>
    <div>
        <nucleus-option 
            @was-selected="updateSelection" 
            :key="index" 
            v-for="nucleus, index in nuclei" 
            :selected="isSelected(nucleus)"
            :nucleus="nucleus"
        ></nucleus-option>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                nuclei: ['1H', '13C'],
                selectedNucleus: '1H',
            }
        },

        methods: {
            isSelected(nucleus) {
                return this.selectedNucleus == nucleus;
            },

            updateSelection(nucleus) {
                this.selectedNucleus = nucleus;
                this.$emit('nucleus-selected', nucleus);
            },
        }
    }
</script>
