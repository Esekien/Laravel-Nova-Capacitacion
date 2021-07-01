<template>
    <card class="flex flex-col ">
        <div class="px-3 py-3">
            <h1 class="text-center text-3xl text-80 font-light">Card de Analitys de prueba</h1>
            <h2 class="text-center text-3xl text-80 font-light">Links hacia ropa</h2>
            <a class="links" href="/nova/resources/ropas">Ver Ropa</a>
            <a class="links" href="/nova/resources/ropas/new">Agregar nueva ropa</a>
            
            
           
        </div>
    </card>
</template>

<script>
export default {
    props: [
        'card',

        // The following props are only available on resource detail cards...
        // 'resource',
        // 'resourceId',
        // 'resourceName',
    ],

    mounted() {
        //
    },
}
</script>
