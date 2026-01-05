public function handle(object $event): void
{
    // event->user adalah user yang baru login
    $cartService = new \App\Services\CartService();
    $cartService->mergeCartOnLogin();
}