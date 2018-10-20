<template>
    <button 
        class="mr-2"
        :class="classes"
        @click="selectSolvent"
    >
        {{ solvent }}
    </button>
</template>

<script>
    export default {
        props: ['solvent', 'selected'],

        computed: {
            classes() {
                if (this.selected) {
                    return "border border-blue bg-blue-dark text-white px-2 py-1";
                }

                return "border border-blue-dark text-blue-dark px-2 py-1 hover:bg-blue-dark hover:text-white";
            }
        },

        methods: {
            selectSolvent() {
                this.$emit('was-selected', this.solvent);
            }
        },
    }
</script>
