<?php
include 'navbar.php';
?>
<style>
.form-inline {
    float: right;
}

.select {
    width: 100%;
    font-weight: 300;
}

.label {
    font-weight: 500;
    margin-bottom: auto;
}

/* label {
    display: inline-block;
} */
</style>

<body>
    <div class="form">
        <form class="form-inline" role="form" method="post" action="">
            <div class="form-group">
                <label class="label">Sort by:</label>
                <select class="select" required tabindex="1">
                    <option value="#" selected="selected">Main Course</option>
                    <option value="#">Unca'an Mansure</option>
                    <option value="#">Pasta</option>
                    <option value="#">Snacks</option>
                    <option value="#">Sweet Tooth</option>
                    <option value="#">Beverages</option>
                </select>
            </div>
        </form>
    </div>
</body>