/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package adsi;

import java.util.Scanner;
public class Adsi {
 public static void main(String[] args) {
 Adsi rp = new Adsi();
 rp.RiwayatPemesanan();
System.out.println("\n=== RIWAYAT PEMESANAN ===\n");
 System.out.println(" 1. ID User            : " + rp.getRiwayatPemesanan());
 System.out.println(" 2. Nama               : " + rp.getNama());
 System.out.println(" 3. Tanggal            : " + rp.getTanggaltest());
 System.out.println(" 4. Jenis Layanan      : " + rp.getJenisLayanan() + " Test");
 System.out.println(" 5. Pelayanan          : " + rp.getPelayanan());
 System.out.println(" 6. Jumlah Pesanan     : " + rp.getJumlahPesanan());
 System.out.println(" 7. Metode Pembayaran : " + 
rp.getMetodePembayaran());
 System.out.println(" 8. Total Harga : Rp. " + rp.getTotalHarga());
 }
 Scanner scan = new Scanner(System.in);
 private int idUser, jumlahPesanan;
 private String nama, tanggaltest, namaRS, jenisLayanan, pelayanan, totalHarga, metodePembayaran;
 public void RiwayatPemesanan() {
 this.nama = nama;
 this.tanggaltest = tanggaltest;
 this.namaRS = namaRS;
 this.jenisLayanan = jenisLayanan;
 this.pelayanan = pelayanan;
 this.totalHarga = totalHarga;
 this.metodePembayaran = metodePembayaran;
 this.idUser = idUser;
 this.jumlahPesanan = jumlahPesanan; 
 System.out.print("Masukkan pelayanan : ");
 pelayanan = scan.nextLine(); 
 System.out.print("Masukkan ID user : ");
 idUser = scan.nextInt();
 System.out.print("Masukkan jumlah pesanan : ");
 jumlahPesanan = scan.nextInt();
 System.out.print("Masukkan nama : ");
 nama = scan.next();
 System.out.print("Masukkan tanggal test : ");
 tanggaltest = scan.next();
 System.out.print("Masukkan nama RS : ");
 namaRS = scan.next();
 System.out.print("Masukkan jenis layanan : ");
 jenisLayanan = scan.next();
 System.out.print("Masukkan metode pembayaran : ");
 metodePembayaran = scan.next();
 System.out.print("Masukkan total harga : ");
 totalHarga = scan.next();
 }
 public int getRiwayatPemesanan() {
 return idUser;
 }
 public int getJumlahPesanan() {
 return jumlahPesanan;
 }
 public String getNama() {
 return nama;
 }
 public String getTanggaltest() {
 return tanggaltest;
 }
 public String getNamaRS() {
 return namaRS;
 }
 public String getJenisLayanan() {
 return jenisLayanan;
 }
 public String getPelayanan() {
 return pelayanan;
 }
 public String getTotalHarga() {
 return totalHarga;
 }
 public String getMetodePembayaran() {
 return metodePembayaran;
 } 
}
