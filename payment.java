package gofit;
import java.util.Scanner;
public class Metode_Pembayaran {
 static Scanner in = new Scanner(System.in);
 private int id_user;
 private String nama;
 private String namaAdmin;
 private int ID_Admin;
 String Total_Harga;
 String Metode_Pembayaran;
 boolean pesanan = true;
 Metode_Pembayaran (String Metode_Pembayaran, String Total_Harga){
 this.Metode_Pembayaran = Metode_Pembayaran;
 this.Total_Harga = Total_Harga;
 }
 String getUser (String nama, int id_user){
 this.nama = nama;
 this.id_user = id_user;
 return nama;
 }
 String getAdmin (String namaAdmin, int ID_Admin){
 this.namaAdmin = namaAdmin;
 this.ID_Admin = ID_Admin;
 return namaAdmin;
 }
 boolean bayar (){
 if (pesanan = true){
 System.out.println("Pilih metode pembayaran : ");
 System.out.println("1. GoPay");
 System.out.println("2. OVO");
 System.out.println("3. Shopeepay");
 System.out.println("4. DANA");
 int input = in.nextInt();
 switch (input){
    case 0 :
    Metode_Pembayaran = "gopay"; break;
    case 1 :
    Metode_Pembayaran = "ovo"; break;
    case 2 :
    Metode_Pembayaran = "shopeepay"; break;
    case 3 :
    Metode_Pembayaran = "dana"; break;
 }
 //System.out.println("Jenis Pembayaran : " + Metode_Pembayaran);
 }
 else {
 System.out.println("Silahkan coba lagi");
 }
 return true;
 }
 String Bayar(String pesanan, String Total_Harga, String 
Metode_Pembayaran) {
 System.out.print("Jenis Pesanan : "); pesanan = in.nextLine();
 System.out.print("Total Harga : "); Total_Harga = in.nextLine();
 System.out.println("Metode Pembayaran : ");
 return Metode_Pembayaran;
 }
 boolean getBayar(){
 if(!Metode_Pembayaran.equals(null)){
System.out.println("Pembayaran telah di proses");
 System.out.println("=====BUKTI PEMBAYARAN=====");
 System.out.println("Nama customer     : ");
 System.out.println("Tanggal Pesan     : dd/mm/yyyy");
 System.out.println("Jenis Layanan     : " + pesanan);
 System.out.println("Total Harga       : " + Total_Harga);
 System.out.println("Metode Pembayaran : " + Metode_Pembayaran);
 }
 else {
 System.out.println("Pembayaran Gagal");
 }
 return true;
 }
 void notifikasiStatusTransaksi(){
 System.out.println();
 System.out.println("Anda telah melakukan pembayaran pada tanggal 
dd/mm/yyyy dan terdaftar pada layanan" + pesanan);
 }
 public static void main(String[] args) {
 Metode_Pembayaran mp = new Metode_Pembayaran("", "");
 mp.Bayar("","","");
 mp.bayar();
 mp.getBayar();
 mp.notifikasiStatusTransaksi();
 }
}
