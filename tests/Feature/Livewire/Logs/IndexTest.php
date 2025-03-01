<?php

use Livewire\Volt\Volt;

it('can render', function () {
    $component = Volt::test('logs.index');

    $component->assertSee('');
});
