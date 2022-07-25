<div id="app-vue">
    <input class="border-[1px] border-[#ccc]" type="text" name="discount" v-model="form.discount">
    <button class="bg-[#ccc] px-[15px] py-[5px] rounded-[10px]" type="button" @click="addDiscount">Add</button>
</div>
<script type="module">
    document.addEventListener("DOMContentLoaded", function() {
        Vue.createApp({
            setup() {
                const state = Vue.reactive({
                    form: {
                        discount: '',
                    }
                });

                const addDiscount = () => {
                    axios.post('<?php echo get_site_url(); ?>/api/discount-save', state.form)
                    .then(response => {
                        console.log(response);
                    })
                    .catch(error => {

                    })
                }

                return { ...Vue.toRefs(state), addDiscount };
            }
        }).mount('#app-vue')
    });
</script>