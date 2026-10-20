import Alpine from 'alpinejs';

document.addEventListener('alpine:init', () => {
  Alpine.store('productModal', {
    open: false,
    product: null,
    show(productData) {
      this.product = productData;
      this.open = true;
      document.body.classList.add('overflow-hidden');
    },
    close() {
      this.open = false;
      this.product = null;
      document.body.classList.remove('overflow-hidden');
    }
  });

  Alpine.store('searchModal', {
    open: false,
    query: '',
    show() {
      this.open = true;
      this.query = '';
      document.body.classList.add('overflow-hidden');
    },
    close() {
      this.open = false;
      document.body.classList.remove('overflow-hidden');
    }
  });
});

window.Alpine = Alpine;
Alpine.start();
