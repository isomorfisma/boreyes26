@extends('layouts.admin')

@section('title', 'Email Settings')
@section('page-title', 'Email Settings')

@section('content')
<div class="mb-6">
    <h2 class="text-2xl font-helvetica font-black text-[#0F4C82]">Email Settings</h2>
    <p class="text-gray-600 font-garet">Configure SMTP settings and manage email templates</p>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- SMTP Settings -->
    <div class="lg:col-span-2 space-y-6">
        <div class="bg-white rounded-lg shadow border border-gray-200 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <div>
                    <h3 class="font-helvetica font-bold text-[#0F4C82]">SMTP Configuration</h3>
                    <p class="text-sm text-gray-600 font-garet">Configure your email server settings</p>
                </div>
                @if($settings && $settings->is_active)
                <span class="px-3 py-1 bg-green-50 text-green-700 text-xs font-garet rounded">Active</span>
                @else
                <span class="px-3 py-1 bg-red-50 text-red-700 text-xs font-garet rounded">Inactive</span>
                @endif
            </div>
            
            <form method="POST" action="{{ route('admin.email.settings.update') }}" class="p-6 space-y-5">
                @csrf
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-garet text-gray-700 mb-2">SMTP Host</label>
                        <input type="text" name="mail_host" value="{{ old('mail_host', $settings->mail_host ?? 'smtp.gmail.com') }}"
                               placeholder="smtp.gmail.com"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent font-garet">
                    </div>
                    <div>
                        <label class="block text-sm font-garet text-gray-700 mb-2">SMTP Port</label>
                        <input type="number" name="mail_port" value="{{ old('mail_port', $settings->mail_port ?? 587) }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent font-garet">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-garet text-gray-700 mb-2">Username (Email)</label>
                        <input type="text" name="mail_username" value="{{ old('mail_username', $settings->mail_username ?? '') }}"
                               placeholder="your@gmail.com"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent font-garet">
                    </div>
                    <div>
                        <label class="block text-sm font-garet text-gray-700 mb-2">Password / App Password</label>
                        <input type="password" name="mail_password" 
                               placeholder="{{ $settings && $settings->mail_password ? '••••••••' : 'Enter password' }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent font-garet">
                        <p class="text-xs text-gray-500 mt-1 font-garet">Leave blank to keep current password</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-garet text-gray-700 mb-2">Encryption</label>
                        <select name="mail_encryption" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent font-garet">
                            <option value="tls" {{ ($settings->mail_encryption ?? 'tls') == 'tls' ? 'selected' : '' }}>TLS</option>
                            <option value="ssl" {{ ($settings->mail_encryption ?? '') == 'ssl' ? 'selected' : '' }}>SSL</option>
                            <option value="null" {{ ($settings->mail_encryption ?? '') == 'null' ? 'selected' : '' }}>None</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-garet text-gray-700 mb-2">From Address</label>
                        <input type="email" name="mail_from_address" value="{{ old('mail_from_address', $settings->mail_from_address ?? '') }}"
                               placeholder="noreply@boreyes.com"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent font-garet">
                    </div>
                    <div>
                        <label class="block text-sm font-garet text-gray-700 mb-2">From Name</label>
                        <input type="text" name="mail_from_name" value="{{ old('mail_from_name', $settings->mail_from_name ?? 'BOREYES 2026') }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent font-garet">
                    </div>
                </div>

                <div class="flex items-center pt-4 border-t border-gray-200">
                    <input type="checkbox" name="is_active" value="1" id="is_active"
                           {{ ($settings->is_active ?? false) ? 'checked' : '' }}
                           class="w-4 h-4 text-[#0F4C82] border-gray-300 rounded focus:ring-[#6F97B6]">
                    <label for="is_active" class="ml-2 text-sm text-gray-700 font-garet">Enable email sending</label>
                </div>

                <div class="flex gap-3 pt-2">
                    <button type="submit" class="px-6 py-2 bg-[#0F4C82] text-white font-garet rounded-lg hover:bg-[#6F97B6] transition">
                        Save Settings
                    </button>
                </div>
            </form>
        </div>

        <!-- Email Templates -->
        <div class="bg-white rounded-lg shadow border border-gray-200 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="font-helvetica font-bold text-[#0F4C82]">Email Templates</h3>
                <p class="text-sm text-gray-600 font-garet">Customize email content</p>
            </div>
            <div class="divide-y divide-gray-200">
                @forelse($templates as $template)
                <div class="p-4 flex items-center justify-between hover:bg-gray-50 transition">
                    <div>
                        <div class="font-garet font-medium text-gray-900">{{ $template->name }}</div>
                        <div class="text-sm text-gray-600 font-garet">{{ $template->subject }}</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        @if($template->is_active)
                        <span class="px-2 py-1 bg-green-50 text-green-700 text-xs font-garet rounded">Active</span>
                        @else
                        <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs font-garet rounded">Inactive</span>
                        @endif
                        <a href="{{ route('admin.email.templates.edit', $template->id) }}" 
                           class="px-3 py-1 bg-[#0F4C82]/10 text-[#0F4C82] text-xs font-garet rounded hover:bg-[#0F4C82]/20 transition">
                            Edit
                        </a>
                    </div>
                </div>
                @empty
                <div class="p-6 text-center text-gray-500 font-garet">
                    No email templates found. Run the seeder to create default templates.
                </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="space-y-6">
        <!-- Test Email -->
        <div class="bg-white rounded-lg shadow border border-gray-200 p-6">
            <h3 class="font-helvetica font-bold text-[#0F4C82] mb-4">Test Email</h3>
            <form method="POST" action="{{ route('admin.email.test') }}">
                @csrf
                <input type="email" name="test_email" placeholder="test@example.com" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6F97B6] focus:border-transparent font-garet mb-3">
                <button type="submit" class="w-full py-2 bg-gradient-to-r from-[#C5E6C9] to-[#D3EB9F] text-[#0F4C82] font-helvetica font-black rounded-lg hover:opacity-90 transition">
                    Send Test Email
                </button>
            </form>
        </div>

        <!-- Gmail Setup Guide -->
        <div class="bg-amber-50 rounded-lg border border-amber-200 p-6">
            <h3 class="font-helvetica font-bold text-amber-900 mb-3">Gmail Setup Guide</h3>
            <ol class="text-sm text-amber-800 space-y-2 list-decimal list-inside font-garet">
                <li>Enable 2-Step Verification in Google Account</li>
                <li>Go to Google Account → Security → App Passwords</li>
                <li>Generate new App Password for "Mail"</li>
                <li>Use that password here (not your regular password)</li>
            </ol>
        </div>

        <!-- Recent Logs -->
        <div class="bg-white rounded-lg shadow border border-gray-200 overflow-hidden">
            <div class="px-4 py-3 border-b border-gray-200 flex items-center justify-between">
                <h3 class="font-helvetica font-bold text-[#0F4C82]">Recent Logs</h3>
                <a href="{{ route('admin.email.logs') }}" class="text-[#0F4C82] text-sm font-garet hover:underline">View All</a>
            </div>
            <div class="divide-y divide-gray-200 max-h-64 overflow-y-auto">
                @forelse($recentLogs as $log)
                <div class="p-3">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-garet text-gray-900 truncate">{{ $log->to_email }}</span>
                        @if($log->status === 'sent')
                        <span class="px-2 py-0.5 bg-green-50 text-green-700 text-xs font-garet rounded">Sent</span>
                        @elseif($log->status === 'failed')
                        <span class="px-2 py-0.5 bg-red-50 text-red-700 text-xs font-garet rounded">Failed</span>
                        @else
                        <span class="px-2 py-0.5 bg-amber-50 text-amber-700 text-xs font-garet rounded">Pending</span>
                        @endif
                    </div>
                    <div class="text-xs text-gray-600 font-garet truncate">{{ $log->subject }}</div>
                    <div class="text-xs text-gray-500 font-garet">{{ $log->created_at->diffForHumans() }}</div>
                </div>
                @empty
                <div class="p-4 text-center text-gray-500 text-sm font-garet">No email logs yet</div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection