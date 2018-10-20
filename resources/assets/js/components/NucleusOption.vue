<template>
    <button 
        class="mr-2"
        :class="classes"
        @click="selectNucleus"
    >
        <sup>{{ nucleus | number }}</sup> {{ nucleus | atom }}
    </button>
</template>

<script>
    export default {
        props: ['nucleus', 'selected'],

        computed: {
            classes() {
                if (this.selected) {
                    return "border border-blue bg-blue text-white px-2 py-1";
                }

                return "border border-blue px-2 py-1 hover:bg-blue text-blue hover:text-white";
            }
        },

        methods: {
            selectNucleus() {
                this.$emit('was-selected', this.nucleus);
            }
        },

        filters: {
            number(value) {
                let pattern = /\d+/g;
                return value.match(pattern)[0];
            },

            atom(value) {
                let pattern = /[A-Z][a-z]?/g;
                return value.match(pattern)[0];  
            }
        }
    }
</script>
