<template>
    <div class="border rounded-3 p-2 bg-secondary  my-2">
        <h1>
            {{ number }}
        </h1>
        <button @click="plusNumber">
            plus Vue
        </button>
    </div>
    <div class="border rounded-3 p-2 bg-secondary my-2 ">
        <slot name="test"/>
    </div>
</template>

<script>

export default{
    name : 'ComponentsTest',
    data:()=>({
        number:0
    }),
    methods:{
        plusNumber(){
            this.number++;
        }
    }

}
</script>
