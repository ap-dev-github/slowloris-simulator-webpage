# DoS Attack Monitoring Dashboard

This project demonstrates a Denial of Service (DoS) attack simulation with real-time monitoring capabilities. The system consists of:

- **Victim Server**: Kali Linux VM running Apache with PHP monitoring scripts
- **Dashboard**: Web-based monitoring interface running on XAMPP (Windows)
- **Attack Script**: Python Slowloris implementation

The dashboard connects to the victim server's PHP endpoint to visualize:
- Active connection count
- RAM utilization
- Response times
- Apache access logs

All monitoring data is displayed in an interactive web interface with visual alerts when attack thresholds are reached.

> **Educational Use Only**  
> This demonstration was created for network security studies.
