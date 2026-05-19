<?php
namespace App\Services;
class PasswordService
{
    /**
     * 產生隨機密碼
     *
     * @param int $length 密碼長度
     * @param bool $includeSymbols 是否包含特殊符號
     * @return string
     */
    public function generate(int $length = 8, bool $includeSymbols = false): string
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        if ($includeSymbols) {
            $characters .= '!@#$%^&*()_+-=[]{}|;:,.<>?';
        }
        $password = substr(str_shuffle(str_repeat($characters,5)), 0, $length);
        return $password;
    }
}