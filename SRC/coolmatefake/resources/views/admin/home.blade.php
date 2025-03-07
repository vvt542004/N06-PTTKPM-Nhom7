<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.parts.head')
</head>
<body>
    <section class="admin">
        <div class="rơw-gird">
            <div class="admin-all">
                 @include('admin.parts.all')
            </div>
            <div class="admin-content">
                <div class="admin-content-top">
                    @include('admin.parts.header')
                    

                </div>
                <div class="admin-all-content-main">
                    <div class="admin-all-content-main-text">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="admin-all-content-main-content">
                        
                    </div>
                </div>
      
            </div>
        </div>
        
    </section>

    <footer>
        @include('admin.parts.footer')
        
    </footer>

    
    
</body>
</html>