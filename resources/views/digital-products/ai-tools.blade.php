@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="products-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="products-hero-title" data-aos="fade-up">AI Tools & Automation Packs</h1>
                <p class="products-hero-subtitle" data-aos="fade-up" data-aos-delay="100">Advanced AI-powered solutions for content creation and business automation</p>
            </div>
        </div>
    </div>
</section>

<!-- Products Grid Section -->
<section class="products-grid-section section-padding section-bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center py-5">
                <div class="no-results-content" data-aos="fade-up">
                    <i class="fas fa-search mb-4" style="font-size: 3rem; color: var(--gnosys-blue); opacity: 0.5;"></i>
                    <h2 class="h4 mb-3">It seems we can’t find what you’re looking for.</h2>
                    <p class="text-muted">Perhaps searching can help.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cart Notification -->
<div id="cartNotification" class="cart-notification">
    <i class="fas fa-check-circle"></i> <span id="cartMessage">Product added to cart!</span>
</div>

<!-- Shopping Cart Sidebar -->
<div id="cartSidebar" class="cart-sidebar">
    <div class="cart-header">
        <h4><i class="fas fa-shopping-cart"></i> Shopping Cart</h4>
        <button id="closeCartBtn" class="btn-close">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="cart-body">
        <div id="cartItems" class="cart-items">
            <!-- Cart items will be dynamically added -->
        </div>
        <div class="cart-summary">
            <div class="cart-total">
                <span>Total: <strong id="cartTotal">$0.00</strong></span>
            </div>
            <button class="btn-gnosys w-100">
                <i class="fas fa-credit-card"></i> Checkout
            </button>
        </div>
    </div>
</div>

<!-- Cart Overlay -->
<div id="cartOverlay" class="cart-overlay"></div>

<script>
// Shopping Cart System
class ShoppingCart {
    constructor() {
        this.cart = [];
        this.init();
    }
    
    init() {
        this.loadCart();
        this.setupEventListeners();
        this.updateCartUI();
    }
    
    setupEventListeners() {
        // Add to cart buttons
        document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const productId = e.target.closest('.add-to-cart-btn').dataset.productId;
                const productCard = e.target.closest('.product-card');
                const product = {
                    id: productId,
                    title: productCard.querySelector('.product-title').textContent,
                    price: productCard.querySelector('.product-price').textContent,
                    image: productCard.querySelector('.product-image img').src,
                    quantity: 1
                };
                this.addToCart(product);
            });
        });
        
        // Cart sidebar controls
        document.getElementById('closeCartBtn')?.addEventListener('click', () => this.closeCart());
        document.getElementById('cartOverlay')?.addEventListener('click', () => this.closeCart());
        
        // Shopping bag icon in navbar
        document.querySelector('.fa-shopping-bag')?.parentElement.addEventListener('click', (e) => {
            e.preventDefault();
            this.toggleCart();
        });
    }
    
    addToCart(product) {
        const existingItem = this.cart.find(item => item.id === product.id);
        
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            this.cart.push(product);
        }
        
        this.saveCart();
        this.updateCartUI();
        this.showNotification(`${product.title} added to cart!`);
        
        // Update cart badge
        const badge = document.querySelector('.fa-shopping-bag').nextElementSibling;
        if (badge) {
            badge.textContent = this.getTotalItems();
        }
        
        // Change Add to Cart button to View Cart
        const button = document.querySelector(`[data-product-id="${product.id}"]`);
        if (button) {
            button.innerHTML = '<i class="fas fa-shopping-cart"></i> View Cart';
            button.classList.remove('add-to-cart-btn');
            button.classList.add('view-cart-btn');
            button.onclick = () => this.openCart();
        }
    }
    
    removeFromCart(productId) {
        this.cart = this.cart.filter(item => item.id !== productId);
        this.saveCart();
        this.updateCartUI();
    }
    
    updateQuantity(productId, quantity) {
        const item = this.cart.find(item => item.id === productId);
        if (item) {
            item.quantity = Math.max(1, quantity);
            this.saveCart();
            this.updateCartUI();
        }
    }
    
    getTotalItems() {
        return this.cart.reduce((total, item) => total + item.quantity, 0);
    }
    
    getTotalPrice() {
        return this.cart.reduce((total, item) => {
            const price = parseFloat(item.price.replace('$', ''));
            return total + (price * item.quantity);
        }, 0);
    }
    
    updateCartUI() {
        const cartItems = document.getElementById('cartItems');
        const cartTotal = document.getElementById('cartTotal');
        
        if (this.cart.length === 0) {
            cartItems.innerHTML = '<div class="empty-cart">Your cart is empty</div>';
        } else {
            cartItems.innerHTML = this.cart.map(item => `
                <div class="cart-item">
                    <img src="${item.image}" alt="${item.title}" class="cart-item-image">
                    <div class="cart-item-details">
                        <h6>${item.title}</h6>
                        <div class="cart-item-price">${item.price}</div>
                        <div class="cart-item-quantity">
                            <button class="quantity-btn" onclick="cart.updateQuantity('${item.id}', ${item.quantity - 1})">-</button>
                            <span>${item.quantity}</span>
                            <button class="quantity-btn" onclick="cart.updateQuantity('${item.id}', ${item.quantity + 1})">+</button>
                        </div>
                    </div>
                    <button class="cart-item-remove" onclick="cart.removeFromCart('${item.id}')">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            `).join('');
        }
        
        cartTotal.textContent = `$${this.getTotalPrice().toFixed(2)}`;
    }
    
    showNotification(message) {
        const notification = document.getElementById('cartNotification');
        const messageEl = document.getElementById('cartMessage');
        
        messageEl.textContent = message;
        notification.classList.add('show');
        
        setTimeout(() => {
            notification.classList.remove('show');
        }, 3000);
    }
    
    openCart() {
        document.getElementById('cartSidebar').classList.add('open');
        document.getElementById('cartOverlay').classList.add('show');
        document.body.style.overflow = 'hidden';
    }
    
    closeCart() {
        document.getElementById('cartSidebar').classList.remove('open');
        document.getElementById('cartOverlay').classList.remove('show');
        document.body.style.overflow = '';
    }
    
    toggleCart() {
        const isOpen = document.getElementById('cartSidebar').classList.contains('open');
        if (isOpen) {
            this.closeCart();
        } else {
            this.openCart();
        }
    }
    
    saveCart() {
        localStorage.setItem('shoppingCart', JSON.stringify(this.cart));
    }
    
    loadCart() {
        const savedCart = localStorage.getItem('shoppingCart');
        if (savedCart) {
            this.cart = JSON.parse(savedCart);
        }
    }
}

// Initialize shopping cart
const cart = new ShoppingCart();
</script>

@endsection
