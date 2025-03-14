<div class="sidebar">
    <div class="logo">
        <img src="{{ asset('images/logodinsos.jpg') }}" alt="Dashboard Logo" class="logo-img">
    </div>
    <ul>
        <li><a href="#" class="active"><i class="fas fa-home"></i> Dashboard</a></li>
        <li><a href="#"><i class="fas fa-credit-card"></i> Payment</a></li>
        <li><a href="#"><i class="fas fa-users"></i> Customers</a></li>
        <li><a href="#"><i class="fas fa-envelope"></i> Message</a></li>
        <li><a href="#"><i class="fas fa-box"></i> Product</a></li>
        <li><a href="#"><i class="fas fa-file-invoice"></i> Invoice</a></li>
        <li><a href="#"><i class="fas fa-chart-line"></i> Analytics</a></li>
    </ul>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-button">
            <i class="fas fa-sign-out-alt"></i> Logout
        </button>
    </form>
</div>