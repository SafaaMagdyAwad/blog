<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement(
            "
            CREATE VIEW user_posts AS
SELECT posts.id as id , users.id as userid , users.name as username , users.email as email , posts.title as title , posts.discription as discription  
from users 
INNER JOIN posts on users.id=posts.user_id
;
            "
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_posts_view');
    }
};
