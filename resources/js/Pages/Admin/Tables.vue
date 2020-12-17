<template>
    <admin>
        <div class="flex flex-wrap mt-4">
            <div class="w-full mb-12 px-4">
                <card-table />
            </div>
            <div class="w-full mb-12 px-4">
                <card-table color="dark" />
            </div>
        </div>
    </admin>
</template>
<script>
import CardTable from "@/components/Cards/CardTable.vue";
import Admin from "@/Layouts/Admin";

export default {
    components: {
        CardTable,
        Admin,
    },
};
</script>
