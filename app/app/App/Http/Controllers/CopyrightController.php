<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    public const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
        ";

    // Generated with  https://patorjk.com/software/taag/
    public const COPYRIGHT = "
 .____   __________     _____                     .__          ________  ________ 
|    |  \______   \   /     \ _____ __________  _|__| ____   /   __   \/   __   \
|    |   |     ___/  /  \ /  \\__  \\_  __ \  \/ /  |/    \  \____    /\____    /
|    |___|    |     /    Y    \/ __ \|  | \/\   /|  |   |  \    /    /    /    / 
|_______ \____|     \____|__  (____  /__|    \_/ |__|___|  /   /____/    /____/  
        \/                  \/     \/                    \/                     
        ";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response( self::getCopyright() )->header('Content-Type', 'text/plain');
    }
}
