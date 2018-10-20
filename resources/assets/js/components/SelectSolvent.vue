<template>
    <div>
        <solvent-option 
            @was-selected="updateSelection" 
            :key="index" 
            v-for="solvent, index in solvents" 
            :selected="isSelected(solvent)"
            :solvent="solvent"
        ></solvent-option>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                solvents: ['Chloroform-d', 'DMSO-d6', 'MeOD'],
                selectedSolvent: 'Chloroform-d',
            }
        },

        methods: {
            isSelected(solvent) {
                return this.selectedSolvent == solvent;
            },

            updateSelection(solvent) {
                this.selectedSolvent = solvent;
                this.$emit('solvent-selected', solvent);
            },
        }
    }
</script>
