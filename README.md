# DoS Attack Monitoring Dashboard

## Project Overview
This demonstration showcases a Denial of Service (DoS) attack simulation with real-time monitoring capabilities. The system consists of:

- **Victim Server**: Kali Linux VM running Apache with PHP monitoring scripts
- **Dashboard**: Web-based monitoring interface running on XAMPP (Windows)
- **Attack Script**: Python Slowloris implementation

The dashboard visualizes:
- Active connection count
- RAM utilization
- Response times
- Apache access logs

## How to Run

1. **Victim VM Setup**:
   - Place `apache_stats.php` in `/var/www/html/` on the Kali VM
   - Configure VM network as **Host-Only** in VMware/VirtualBox

2. **Host PC Setup**:
   - Put the `dos-dashboard` folder in XAMPP's `htdocs` directory
   - Update all IP references in code files to match your VM's IP
   - Start Apache service in XAMPP

3. **Execution**:
   - Run the attack from another VM/WSL on the same host
   - Monitor results at `http://localhost/dos-dashboard/`

> **Educational Use Only**  
> Requires proper authorization for testing.  
> Default credentials: No authentication implemented (for lab use only).
